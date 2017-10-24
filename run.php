<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


require __DIR__ . '/vendor/autoload.php';

$file = 'Uiljam_Golding_-_Poveliteljat_na_muhite_-1394-b.sfb';
$conv = new Sfblib\SfbToFb2Converter($file, dirname($file));

$conv->setObjectCount(1);
$conv->rmPattern(' —')->rmRegExpPattern('/^— /');
$conv->disableParagraphIds();
$conv->convert();
$testOutput = $conv->getContent();

// remove double new lines
$testOutput = preg_replace('/\n\n+/', "\n", $testOutput);
$testOutput = strtr($testOutput, [
	"<p>\n" => '<p>',
	"\n</p>" => '</p>',
]);
$testOutput = rtrim($testOutput, "\n");

// save output if wanted
$outDir = dirname($file) . '/output';

if (file_exists($outDir)) {
	file_put_contents($outDir .'/'. basename($file, '.sfb') . '.fb2', $testOutput);
}

echo 'converted, go to <strong>/output/&lt;your-file-name&gt;.fb2</strong>';