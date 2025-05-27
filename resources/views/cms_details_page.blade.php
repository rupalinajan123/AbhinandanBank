@include('header')

    <!-- <div class="innerBanner">
    <div class="text_ib">
        <h5>
        @if(Session::get('site_language')=='MR') 
        {{  (isset($data[0]->title_marathi)) ? $data[0]->title_marathi:'' }} 
        @else
        {{  (isset($data[0]->title_english)) ? $data[0]->title_english:'' }} 
        @endif   
        </h5>
        <ol class="">
            <li><a href="#">Home</a></li>
            <li><a href="#">&nbsp;/&nbsp;</a></li>
            <li class="active">
            @if(Session::get('site_language')=='MR') 
            {{  (isset($data[0]->title_marathi)) ? $data[0]->title_marathi:'' }} 
            @else
            {{  (isset($data[0]->title_english)) ? $data[0]->title_english:'' }} 
            @endif 
            </li>
        </ol>
    </div>
</div> -->
<!-- <section class="innerPagetext">

    <div class="container "> -->
       
	        <!-- <div class=""> -->
                <!--row-->
	        
	       
    	        @if(Session::get('site_language')=='MR')
    	            @php
    	            if(isset($data[0]->desc_marathi)){
        	            $url = URL::to("/");
                        $desc = str_replace("#url#",$url.'/',$data[0]->desc_marathi);
                        echo $desc;
                    }
    	            @endphp
    	        @else
    	            @php
    	            if(isset($data[0]->desc_english)){
        	            $url = URL::to("/");
                        $desc = str_replace("#url#",$url.'/',$data[0]->desc_english);
                        echo $desc;
                    }
    	            @endphp
    	        @endif
	          
	        
	        <!-- </div>
       
    </div>
</section> -->
 @include('footer')      