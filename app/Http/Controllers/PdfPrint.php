<?php
namespace App\Http\Controllers;
use Codedge\Fpdf\Fpdf\Fpdf;
use Illuminate\Http\Request;

class PdfPrint extends Controller
{
   public static function print(Request $request) {
    $fpdf = new Fpdf('P','mm','A4');
    $fpdf -> AddPage();
    $fpdf -> SetTitle("Sample Voucher");
    $fpdf -> SetFont('Arial', '', 25);
    $fpdf -> Ln();
    $fpdf -> SetFont('Arial', 'B', 24);
    $fpdf -> SetTextColor(225, 225,225);
    $fpdf -> SetFillColor(150, 123, 100);
    $fpdf -> SetDrawColor(0, 0, 0);
    $fpdf -> MultiCell(195, 20, "COMPANY NAME:", 01, 0, 'true');

    $fpdf -> SetFont('Arial', 'B', 12);
    $fpdf -> SetTextColor(0,0,0);
    $fpdf -> Cell(195, 8, "Street, Adress:", 01, 01, 'L');
    $fpdf -> Cell(195, 8, "City, Province:", 01, 01, 'L');
    $fpdf -> Cell(195, 8, "Zip Code:", 01, 01, 'L');
    
    $fpdf -> Ln();

    $fpdf -> Cell(45, 8, "Employee Name:", 01, 0, 'L');
    $fpdf -> Cell(150, 8, "", 01, 01, 'L');
    $fpdf -> Cell(45, 8, "Phone no.", 01, 0, 'L');
    $fpdf -> Cell(150, 8, "", 01, 01, 'L');
    $fpdf -> Cell(45, 8, "Adress:", 01, 0, 'L');
    $fpdf -> Cell(150, 8, "", 01, 01, 'L');

    $fpdf -> Cell(195, 8, "", 01, 01, 'L');

    $fpdf -> Cell(45, 8, "TIN", 01, 0, 'L');
    $fpdf -> Cell(150, 8, "", 01, 01, 'L');
    $fpdf -> Cell(45, 8, "Period Ending:", 01, 0, 'L');
    $fpdf -> Cell(150, 8, "", 01, 01, 'L');
    $fpdf -> Cell(45, 8, "Pay Date:", 01, 0, 'L');
    $fpdf -> Cell(150, 8, "", 01, 01, 'L');
    
    $fpdf -> Ln();

    $fpdf -> SetFont('Arial', 'B', 12);   
    $fpdf -> Cell(39, 8, "Earnings", 01, 0,'C');
    $fpdf -> Cell(39, 8, "Rate", 01, 0, 'C');
    $fpdf -> Cell(39, 8, "Hours", 01, 0, 'C');
    $fpdf -> Cell(39, 8, "Current", 01, 0, 'C');
    $fpdf -> Cell(39, 8, "YTD", 01, 01, 'C');
    $fpdf -> Cell(39, 8, "", 01, 0,'C');
    $fpdf -> Cell(39, 8, "", 01, 0,'C');
    $fpdf -> Cell(39, 8, "", 01, 0,'C');
    $fpdf -> Cell(39, 8, "", 01, 0,'C');
    $fpdf -> Cell(39, 8, "", 01, 01,'C');

    $fpdf -> Cell(39, 8, "", 01, 0,'C');
    $fpdf -> Cell(39, 8, "", 01, 0,'C');
    $fpdf -> Cell(39, 8, "", 01, 0,'C');
    $fpdf -> Cell(39, 8, "", 01, 0,'C');
    $fpdf -> Cell(39, 8, "", 01, 01,'C');

    $fpdf -> Cell(39, 8, "", 01, 0,'C');
    $fpdf -> Cell(39, 8, "", 01, 0,'C');
    $fpdf -> Cell(39, 8, "", 01, 0,'C');
    $fpdf -> Cell(39, 8, "", 01, 0,'C');
    $fpdf -> Cell(39, 8, "", 01, 01,'C');

    $fpdf -> Cell(39, 8, "", 01, 0,'C');
    $fpdf -> Cell(39, 8, "", 01, 0,'C');
    $fpdf -> Cell(39, 8, "", 01, 0,'C');
    $fpdf -> Cell(39, 8, "", 01, 0,'C');
    $fpdf -> Cell(39, 8, "", 01, 01,'C');

    $fpdf -> Cell(39, 8, "", 01, 0,'C');
    $fpdf -> Cell(39, 8, "", 01, 0,'C');
    $fpdf -> Cell(39, 8, "", 01, 0,'C');
    $fpdf -> Cell(39, 8, "", 01, 0,'C');
    $fpdf -> Cell(39, 8, "", 01, 01,'C');

    $fpdf -> Cell(117, 8, "Gross Pay", 01, 0,'L');
    $fpdf -> Cell(39, 8, "0$", 01, 0,'C');
    $fpdf -> Cell(39, 8, "", 01, 01,'C');

    $fpdf -> SetTextColor(225, 225,225);
    $fpdf -> SetFillColor(0, 0, 0);
    $fpdf -> Ln();
    $fpdf -> MultiCell(195, 8, "Deductions", 01, 01,'true');
    $fpdf -> Cell(97.5, 8, "", 01, 0,'C');
    $fpdf -> Cell(97.5, 8, "", 01, 01,'C');
    
    $fpdf -> Cell(97.5, 8, "", 01, 0,'C');
    $fpdf -> Cell(97.5, 8, "", 01, 01,'C');
    
    $fpdf -> Cell(97.5, 8, "", 01, 0,'C');
    $fpdf -> Cell(97.5, 8, "", 01, 01,'C');  

    $fpdf -> Cell(97.5, 8, "", 01, 0,'C');
    $fpdf -> Cell(97.5, 8, "", 01, 01,'C');

    $fpdf -> SetFont('Arial', 'B', 12);
    $fpdf -> SetTextColor(0, 0,0);
    $fpdf -> SetFillColor(0, 0, 0);

    $fpdf -> Cell(97.5, 8, "Total Deduction", 01, 0,'L');
    $fpdf -> Cell(97.5, 8, "0$", 01, 01,'C');
    $fpdf -> Ln();
    $fpdf -> Cell(97.5, 8, "Net Pay", 01, 0,'true');
    $fpdf -> Cell(97.5, 8, "0$", 01, 1,'C');

    $fpdf -> Ln();
    

    $fpdf -> Line(20, 270, 75, 270);
    $fpdf -> Text(28, 274, "Employee Signature", 0, 1,'C');

    $fpdf -> Line(140, 270, 195, 270);
    $fpdf -> Text(150, 274, "Employer Signature", 0, 1,'C');




    $fpdf->Output();
    exit;
    
   }
}           