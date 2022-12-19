<?php
header('Content-type:application/octect-stream'); // we will be outputing a pdf and octect-stream for any file download
header('Content-Disposition:attachment;filename="gls.pdf"'); // we will called downlod pdf
readfile('hr_interview_question.pdf'); // download lower side in loading it must readfile full path/rename of original file
?>