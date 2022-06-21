<?php
        
        $age["surname"] = "oyin";
        $age["fname"] = "fumi";
        $age["oname"] = "ola";
        $age["dob"] = "24/04/2016";
        $age["email"] =  "olas20@gmail.com" ;
        
        $age["pword"] = "bisi";
        $age["gender"] = "female";
        $age["mnumber"] = "08053633569";
        $age["nation"] = "Nigeria";
        $age["soo"] = "lagos";
        $age["lga"] = "agege";
        $age["rdress"] = "gcdfat ghdftdgasg shudg";
        
        $age["odress"] = "retrd strdrdhd drehg ft";
        $age["ainvest"] = "100000";
        $age["doinvest"] = "24/04/2015";
        $age["iname"] = "kandart";
        $age["soi"] = "dh;k?/366dft*dsrh";
        $age["soc"] = "ct465tvtr.gb?/vf";
        $age["dob2"] = "24/04/2015";
    
    
    

    echo "<table style='border:2px solid;'>
<tr style='border:2px solid; padding:20px; background-color:orange;'><th>Key</th><th>Value</th></tr>
";

foreach($age as $k => $k_value){


    echo 
   "<tr style='border:2px solid; padding:20px; background-color:orange;'><td>$k</td> <td>$k_value</td>
 
    </tr>";


}
echo "</table>";
?>