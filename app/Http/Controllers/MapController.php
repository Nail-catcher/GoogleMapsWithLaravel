<?php

namespace App\Http\Controllers;
use DotaController\index;
use Illuminate\Http\Request;
use FarhanWazir\GoogleMaps\GMaps;
use session;
class MapController extends Controller
{
       protected $gmap;

    public function __construct(GMaps $gmap){
        $this->gmap = $gmap;
    }
public function map()
    {
        
        $config = array();
        $config['map_height'] = "100%";
        $config['center'] = '55.4408925,65.3393913';
        $config['onboundschanged'] = 'if (!centreGot) {
            var mapCentre = map.getCenter();
            marker_0.setOptions({
                position: new google.maps.LatLng(mapCentre.lat(), mapCentre.lng())
            });
        }
        centreGot = true;';

        $this->gmap->initialize($config); // Initialize Map with custom configuration

        // set up the marker ready for positioning
        $marker = array();
        $marker['draggable'] = true;
        $marker['ondragend'] = '
        iw_'. $this->gmap->map_name .'.close();
        reverseGeocode(event.latLng, function(status, result, mark){
            if(status == 200){
                iw_'. $this->gmap->map_name .'.setContent(result);
                iw_'. $this->gmap->map_name .'.open('. $this->gmap->map_name .', mark);
            }
        }, this);
        ';
        $this->gmap->add_marker($marker);

        $map = $this->gmap->create_map(); // This object will render javascript files and map view; you can call JS by $map['js'] and map view by $map['html']
    
        return view('map',compact('map'));
    }

 public function direction(Request $request)
    {  
        $a=$request->session()->get('streeta'); 
        $b=$request->session()->get('homea');  
        $c=$request->session()->get('citya'); 
         $d=$request->session()->get('countrya'); 
         $z=",";
         $s=$a.$z.$b.$z.$c.$z.$d;
    $a1=$request->session()->get('streetb'); 
        $b1=$request->session()->get('homeb');  
        $c1=$request->session()->get('cityb'); 
         $d1=$request->session()->get('countryb'); 
         
         $s1=$a1.$z.$b1.$z.$c1.$z.$d1;
       
        $config['center'] = '55.4408925,65.3393913';
        $config['zoom'] = '14';
        $config['map_height'] = '500px';
        $config['geocodeCaching'] = true;
    
        $config['directions'] = true;
        $config['directionsStart'] = $s;
        $config['directionsEnd'] = $s1;
        $config['directionsDivID'] =  'directionsDiv';
    
        $gmap = new GMaps();
        $gmap->initialize($config);
        $map = $gmap->create_map();
        return view('map',compact('map','s', 's1'));
    
    }
}
