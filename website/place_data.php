<?php
        $con=mysql_connect("localhost","root","");
        mysql_select_db("explore_india");
        $aaa=mysql_query("select * from places_info where place_id=$place_id_page");
        $bbb=mysql_fetch_array($aaa);
        $data="";
        while($row=$bbb)
        {
            $slider=$bbb['slider'];
            $photos=$bbb['photos'];
            $places=$bbb['top_places'];
            $places_name=$bbb['places_name'];
            $title_name=$main_data['place_name'];
            $msg=preg_split("/,/",$title_name);
            $img_src_data1=array();
            $img_src_data2=array();
            $img_src_data3=array();
            $placename=array();
            $a=substr_count($slider,"*");
            $b=substr_count($photos,"*");
            $c=substr_count($places,"*");
            $d=substr_count($places_name,",");
            $i=0;
            $j=0;
            $k=0;
            $n=0;
            while($i<$a)
            {
                $pos1=0;
                $pos2=strpos($slider,"*");
                $strtemp1=substr($slider,$pos1,$pos2);
                $strtemp2=substr($slider,$pos2+1);
                $slider=$strtemp2;
                $img_src_data1[$i]=$strtemp1;
                $i++;
            }
            while($j<$b)
            {
                $pos1=0;
                $pos2=strpos($photos,"*");
                $strtemp1=substr($photos,$pos1,$pos2);
                $strtemp2=substr($photos,$pos2+1);
                $photos=$strtemp2;
                $img_src_data2[$j]=$strtemp1;
                $j++;
            }
            while($k<$c)
            {
                $pos1=0;
                $pos2=strpos($places,"*");
                $strtemp1=substr($places,$pos1,$pos2);
                $strtemp2=substr($places,$pos2+1);
                $places=$strtemp2;
                $img_src_data3[$k]=$strtemp1;
                $k++;
            }
            while($n<$d)
            {
                $pos1=0;
                $pos2=strpos($places_name,",");
                $strtemp1=substr($places_name,$pos1,$pos2);
                $strtemp2=substr($places_name,$pos2+1);
                $places_name=$strtemp2;
                $placename[$n]=$strtemp1;
                $n++;
            }
            $data.="<div class='slider'>
                        <ul class='slides'>
                            <li>
                                <img src='./Dashboard/upload/slider/".$img_src_data1[0]."'>
                                    <div class='caption center-align'>
                                        <h2>".$main_data['place_name']."</h2>
                                    </div>
                            </li>
                            <li>
                                <img src='./Dashboard/upload/slider/".$img_src_data1[1]."'>
                                    <div class='caption center-align'>
                                        <h2>".$main_data['place_name']."</h2>
                                    </div>
                            </li>
                            <li>
                                <img src='./Dashboard/upload/slider/".$img_src_data1[2]."'>
                                    <div class='caption center-align'>
                                        <h2>".$main_data['place_name']."</h2>
                                    </div>
                            </li>
                        </ul>
                    </div>
                    <div>
        <br>
        <h2 id='info' class='center-align' style='color:#3b444f;font-weight:100;font-family:font-family: 'Permanent Marker', cursive;'>Welcome to ".$msg[0]."
            <center>
                <div class='dash'></div>
            </center>
        </h2>
        <br>
        <div>
            <div class='row'>
                <div class='col s1 m2 l2'></div>
                <div class='col s10 m8 l8'>
                    <p class='place-info-font'>".$bbb[4]."</p>
                    <div class='read-more' style='position:relative;text-align:center;margin-top:70px;font-size:16px;cursor:pointer;'>READ MORE</div>
                    <p class='info' style='font-size:20px;font-weight:300;//font-family: 'Dosis', sans-serif;'>".$bbb[5]."</p>
                    <div class='read-less' style='position:relative;text-align:center;margin-top:50px;font-size:16px;cursor:pointer;'>READ LESS</div>
                </div>
                <div class='col s1 m2 l2'></div>
            </div>
        </div>
        <div class='container' style='position:relative;margin-top:40px;'>
            <ul id='tabs-swipe-demo' class='tabs' style='background-color:rgb(240, 240, 240);'>
                <li class='tab col s3'>
                    <a class='active' href='#photos' style='position:absolute;width:50%;font-size:18px;'>PHOTOS</a>
                </li>
                <li class='tab col s3'>
                    <a href='#videos' style='position:absolute;width:50%;left:50%;font-size:18px;'>VIDEOS</a>
                </li>
            </ul>

            <!--            Photos-->
            <div id='photos' class='col s12'>
                <div class='row' style='position:relative;padding-top:40px;'>
                    <div class='col s12 m4 l4'>
                        <img class='responsive-img materialboxed' src='./Dashboard/upload/photos/".$img_src_data2[0]."' style='height:250px'>
                    </div>
                    <div class='col s12 m4 l4'>
                        <img class='responsive-img materialboxed' src='./Dashboard/upload/photos/".$img_src_data2[1]."' style='height:250px'>
                    </div>
                    <div class='col s12 m4 l4'>
                        <img class='responsive-img materialboxed' src='./Dashboard/upload/photos/".$img_src_data2[2]."' style='height:250px'>
                    </div>
                </div>                  
                <div class='row'>
                    <div class='col s12 m4 l4'>
                        <img class='responsive-img materialboxed' src='./Dashboard/upload/photos/".$img_src_data2[3]."' style='height:250px'>
                    </div>
                    <div class='col s12 m4 l4'>
                        <img class='responsive-img materialboxed' src='./Dashboard/upload/photos/".$img_src_data2[4]."' style='height:250px'>
                    </div>
                    <div class='col s12 m4 l4'>
                        <img class='responsive-img materialboxed' src='./Dashboard/upload/photos/".$img_src_data2[5]."' style='height:250px'>
                    </div>
                </div>
            </div>
            <!--            Videos-->
            <div id='videos' class='col s12'>
                <div class='row' style='position:relative;padding-top:40px;'>
                    <div class='col s12 m4 l4'>
                        <div class='video-container' style='height:200px;'>
                            <iframe src=".$bbb[7]." frameborder='0' allow='accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class='col s12 m4 l4'>
                        <div class='video-container' style='height:200px;'>
                            <iframe src=".$bbb[8]." frameborder='0' allow='accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class='col s12 m4 l4'>
                        <div class='video-container' style='height:200px;'>
                            <iframe src=".$bbb[9]." frameborder='0' allow='accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <h2 id='places' class='center-align' style='color:#3b444f;font-weight:100;font-family:font-family: 'Permanent Marker', cursive;'>Top Experiences in ".$msg[0]."
            <center>
                <div class='dash'></div>
            </center>
        </h2>
        <br>
        <br>
        <div class='card-box'>

            <div class='item tm1'>
                <img class='img' src='./Dashboard/upload/places/".$img_src_data3[0]."'>
                <p class='ar'>".$placename[0]."</p>
            </div>

            <div class='item tm2'>
                <img class='img' src='./Dashboard/upload/places/".$img_src_data3[1]."'>
                <p class='ar'>".$placename[1]."</p>
            </div>

            <div class='item tm3'>
                <img class='img' src='./Dashboard/upload/places/".$img_src_data3[2]."'>
                <p class='ar'>".$placename[2]."</p>
            </div>
            <br>

            <div class='item tm4'>
                <img class='img' src='./Dashboard/upload/places/".$img_src_data3[3]."'>
                <p class='ar'>".$placename[3]."</p>
            </div>

            <div class='item tm5'>
                <img class='img' src='./Dashboard/upload/places/".$img_src_data3[4]."'>
                <p class='ar'>".$placename[4]."</p>
            </div>
        </div>
    </div>";
        $bbb=mysql_fetch_array($aaa);
        }
        mysql_close($con);
?>