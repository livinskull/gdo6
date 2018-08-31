<?php
namespace GDO\Net;
use GDO\File\GDO_File;
/**
 * File utility to stream downloads in chunks.
 * 
 * @author gizmore
 * @since 3.00
 * @version 6.07
 */
final class Stream
{
	public static function path($path)
	{
		$out = false;
		if (ob_get_level()>0)
		{
			$out = ob_end_clean();
		}
		$result = self::_path($path);
		if ($out !== false)
		{
			ob_start();
			echo $out;
		}
		return $result;
	}
	
	public static function _path($path)
	{
		if ($fh = fopen($path, 'rb'))
		{
			while (!feof($fh))
			{
				echo fread($fh, 1024*1024);
				flush();
			}
			fclose($fh);
			return true;
		}
		return false;
	}
	
	public static function file(GDO_File $file, $variant)
	{
		self::path($file->getVariantPath($variant));
	}
	
	public static function serve(GDO_File $file, $variant='')
	{
		header('Content-Type: '.$file->getType());
		header('Content-Size: '.$file->getSize());
		header('Content-Disposition: attachment; filename="'.htmlspecialchars($file->getName()).'"');
		self::file($file, $variant);
		die();
	}
}
