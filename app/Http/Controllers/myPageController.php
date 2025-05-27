<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class myPageController extends Controller
{
    public function showPath(Request $request) {
    	// dd("ddd");
      $uri = $request->path();
      echo '<br>URI: '.$uri;
      
      $url = $request->url();
      echo '<br>';
      
      echo 'URL: '.$url;
      $method = $request->method();
      echo '<br>';
      
      echo 'Method: '.$method;

      //$users = User::find(1);
      //dd($user->toArray());
      //$users = $user->toArray();

      
      $users = User::get();
		  //$users = User::where('id', 2)->get();
			   
		// dd($users->toArray());

      return view('my_page',compact('users'));


   }

    public function annual_report_20_21(Request $request)
    {
        $filename = 'assets/front/images/pdf/Downloads-Annual Report.pdf';

        if (file_exists($filename)) {
          // print_r($filename);die();
          header('Content-Description: File Transfer');
          header('Content-Type: application/octet-stream');
          header('Content-Disposition: attachment; filename="' . basename($filename) . '"');
          header('Expires: 0');
          header('Cache-Control: must-revalidate');
          header('Pragma: public');
          header('Content-Length: ' . filesize($filename));
          readfile($filename);

        }else{
          die('Error to download PDF file.');
        }
    }

    public function annual_report_21_22(Request $request)
    {
        $filename = 'assets/front/images/pdf/AGM 2021-2022.pdf';

        if (file_exists($filename)) {
          // print_r($filename);die();
          header('Content-Description: File Transfer');
          header('Content-Type: application/octet-stream');
          header('Content-Disposition: attachment; filename="' . basename($filename) . '"');
          header('Expires: 0');
          header('Cache-Control: must-revalidate');
          header('Pragma: public');
          header('Content-Length: ' . filesize($filename));
          readfile($filename);

        }else{
          die('Error to download PDF file.');
        }
    }

   public function annual_report_22_23(Request $request)
    {
        $filename = 'assets/front/images/pdf/AGM_2022-2023.pdf';

        if (file_exists($filename)) {
          // print_r($filename);die();
          header('Content-Description: File Transfer');
          header('Content-Type: application/octet-stream');
          header('Content-Disposition: attachment; filename="' . basename($filename) . '"');
          header('Expires: 0');
          header('Cache-Control: must-revalidate');
          header('Pragma: public');
          header('Content-Length: ' . filesize($filename));
          readfile($filename);

        }else{
          die('Error to download PDF file.');
        }
    }

    public function annual_report_24(Request $request)
    {
        $filename = 'assets/front/images/pdf/Abhinandan_Ahwal_2024-FINAL.pdf';

        if (file_exists($filename)) {
          // print_r($filename);die();
          header('Content-Description: File Transfer');
          header('Content-Type: application/octet-stream');
          header('Content-Disposition: attachment; filename="' . basename($filename) . '"');
          header('Expires: 0');
          header('Cache-Control: must-revalidate');
          header('Pragma: public');
          header('Content-Length: ' . filesize($filename));
          readfile($filename);

        }else{
          die('Error to download PDF file.');
        }
    }


  public function application_form(Request $request)
    {
        $filename = 'assets/front/images/pdf/ApplicationForm.pdf';

        if (file_exists($filename)) {
        //   print_r($filename);die();
          header('Content-Description: File Transfer');
          header('Content-Type: application/octet-stream');
          header('Content-Disposition: attachment; filename="' . basename($filename) . '"');
          header('Expires: 0');
          header('Cache-Control: must-revalidate');
          header('Pragma: public');
          header('Content-Length: ' . filesize($filename));
          readfile($filename);

        }else{
          die('Error to download PDF file.');
        }
    }

}
