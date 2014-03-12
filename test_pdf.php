<?php
//============================================================+
// File name   : example_002.php
// Begin       : 2008-03-04
// Last Update : 2013-05-14
//
// Description : Example 002 for TCPDF class
//               Removing Header and Footer
//
// Author: Nicola Asuni
//
// (c) Copyright:
//               Nicola Asuni
//               Tecnick.com LTD
//               www.tecnick.com
//               info@tecnick.com
//============================================================+

/**
 * Creates an example PDF TEST document using TCPDF
 * @package com.tecnick.tcpdf
 * @abstract TCPDF - Example: Removing Header and Footer
 * @author Nicola Asuni
 * @since 2008-03-04
 */

// Include the main TCPDF library (search for installation path).
require_once('lib/tcpdf/tcpdf.php');

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Nicola Asuni');
$pdf->SetTitle('TCPDF Example 002');
$pdf->SetSubject('TCPDF Tutorial');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

// remove default header/footer
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lib/tcpdf/lang/eng.php')) {
    require_once(dirname(__FILE__).'/lib/tcpdf/lang/eng.php');
    $pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// set font
// $pdf->SetFont('times', 'BI', 20);
$pdf->SetFont('dejavusans', '', 20);

// add a page
$pdf->AddPage();

// set some text to print
$html = <<<EOD
<div style="text-align: center;">
	<img src="relatorio/logo.jpg" style="width: 300px;" />
	<br /><br /><br /><br />
	<div>
		<h1>Plano Diretor de Tecnologia da Informação da Prefeitura Municipal de</h1>
	</div>
	<p>&nbsp;</p><p>&nbsp;</p>
	<h3>LONDRINA - PR<br />2014</h3>
</div>
EOD;

$pdf->writeHTML($html,  true, false, true, false, '');
$pdf->lastPage();

//------------------------

// add a page
$pdf->AddPage();

// set some text to print
$html = <<<EOD
<div style="text-align: center;">
	<img src="relatorio/logo.jpg" style="width: 300px;" />
	<br /><br /><br /><br />
	<div>
		<h1>Plano Diretor de Tecnologia da Informação da Prefeitura Municipal de</h1>
	</div>
	<table width="100%">
		<tr>
			<td width="35%"></td>
			<td width="65%">
				<div style="text-align: left; font-size: 14pt; font-weight: bold;">
					<u>Equipe Técnica:</u><br/>
					Prof. Dr. Bruno Bogaz Zarpelão<br/>
					Prof. Dr. Rodolfo Miranda de Barros<br/>
				</div>
			</td>
		</tr>
		<tr>
			<td width="35%"></td>
			<td width="65%">
				<div style="text-align: left; font-size: 14pt; font-weight: bold;">
					<u>Equipe Administrativa:</u>
					Graça Maria Simões Luz – Diretora Presidente<br />
					Mário Luís Orsi – Diretor Vice-Presidente<br />
					Rita de Cássia Rocha – Gerente Executiva<br />
					Mariele Cestari – Assessora de Projetos<br />
				</div>
			</td>
		</tr>
	</table>
	
</div>
EOD;

$pdf->writeHTML($html,  true, false, true, false, '');

/*$html = <<<EOD
<div>
	<u>Equipe Técnica:</u><br/>
	Prof. Dr. Bruno Bogaz Zarpelão<br/>
	Prof. Dr. Rodolfo Miranda de Barros<br/>
</div>
EOD;

$pdf->SetFillColor(255,255,0);
$pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, 'C', true);*/
$pdf->lastPage();



//---------------------------

// add a page
$pdf->AddPage();

// set some text to print
$html = <<<EOD
<div style="text-align: center;">
	ma oeee
</div>
EOD;

$pdf->writeHTML($html,  true, false, true, false, '');
$pdf->lastPage();


// ---------------------------------------------------------

//Close and output PDF document
$pdf->Output('example_002.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+