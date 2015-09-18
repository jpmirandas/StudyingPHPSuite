<?php
class MySuite {
	public static function suite() {
		$suite = new PHPUnit_Framework_TestSuite ();
		
		foreach ( new DirectoryIterator ( __DIR__ ) as $file ) {
			if ($file->isFile ()) {
				$suite->addTestFile ( $file->getFilename () );
			}
		}
		
		return $suite;
	}
}


