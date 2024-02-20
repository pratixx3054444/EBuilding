<?php

if(!empty($row['cost1']) && $row['cost2']===0)
{
        echo '<script>let i=0;
    let placeholder="";

    const txt1="1 bhk cost";

    const speed=200;

    function type(){
        placeholder+=txt1.charAt(i);

        document.getElementById("textbox1").setAttribute("placeholder",placeholder);


        i++;
        setTimeout(type,speed);

    }
    type();</script>';
}
else if(!empty($row['cost1']) && !empty($row['cost2']) && empty ($row['cost3']))
{
    echo '<script>
let i=0;
let placeholder="";
let placeholder2="";
const txt1="1 bhk cost";
const txt2="2 bhk cost";
const speed=200;

function type(){
    placeholder+=txt1.charAt(i);
    placeholder2+=txt2.charAt(i);
    document.getElementById("textbox1").setAttribute("placeholder",placeholder);
    document.getElementById("textbox2").setAttribute("placeholder",placeholder2);

    i++;
    setTimeout(type,speed);

}
type()</script>';

 echo '<script>setTimeout(function() {';
echo 'var textbox = document.getElementById("textbox1");';
echo 'var textbox2 = document.getElementById("textbox2");';
echo 'textbox.removeAttribute("placeholder");';
echo 'textbox.value = "'.$row['cost1'].'";';
echo 'textbox2.value = "'.$row['cost2'].'";';
echo '}, 3000);';
echo '</script>';
}
else if(!empty($row['cost1']) && !empty($row['cost2']) && !empty($row['cost3']) && empty ($row['cost4']))
{
echo '<script>
let i=0;
let placeholder="";
let placeholder2="";
let placeholder3="";
const txt1="1 bhk cost";
const txt2="2 bhk cost";
const txt3="3 bhk cost";
const speed=200;

function type(){
    placeholder+=txt1.charAt(i);
    placeholder2+=txt2.charAt(i);
    placeholder3+=txt3.charAt(i);
    document.getElementById("textbox1").setAttribute("placeholder",placeholder);
    document.getElementById("textbox2").setAttribute("placeholder",placeholder2);
    document.getElementById("textbox3").setAttribute("placeholder",placeholder3);

    i++;
    setTimeout(type,speed);

}
type();';

 echo 'setTimeout(function() {';
echo 'var textbox = document.getElementById("textbox1");';
echo 'var textbox2 = document.getElementById("textbox2");';
echo 'var textbox3 = document.getElementById("textbox3");';
echo 'textbox.removeAttribute("placeholder");';
echo 'textbox.value = "'.$row['cost1'].'";';
echo 'textbox2.value = "'.$row['cost2'].'";';
echo 'textbox3.value = "'.$row['cost3'].'";';
echo '}, 3000);';
echo '</script>';
}
else if(!empty($row['cost1']) && !empty($row['cost2']) && !empty($row['cost3']) && !empty ($row['cost4']) && empty($row['cost5']))
{
    echo '<script>let i=0;
let placeholder="";
let placeholder2="";
let placeholder3="";
let placeholder4="";
const txt1="1 bhk cost";
const txt2="2 bhk cost";
const txt3="3 bhk cost";
const txt4="4 bhk cost";
const speed=200;

function type(){
    placeholder+=txt1.charAt(i);
    placeholder2+=txt2.charAt(i);
    placeholder3+=txt3.charAt(i);
    placeholder4+=txt4.charAt(i);
    document.getElementById("textbox1").setAttribute("placeholder",placeholder);
    document.getElementById("textbox2").setAttribute("placeholder",placeholder2);
    document.getElementById("textbox3").setAttribute("placeholder",placeholder3);
    document.getElementById("textbox4").setAttribute("placeholder",placeholder4);

    i++;
    setTimeout(type,speed);

}
type();';
    echo 'setTimeout(function() {';
echo 'var textbox = document.getElementById("textbox1");';
echo 'var textbox2 = document.getElementById("textbox2");';
echo 'var textbox3 = document.getElementById("textbox3");';
echo 'var textbox4 = document.getElementById("textbox4");';
echo 'textbox.removeAttribute("placeholder");';
echo 'textbox.value = "'.$row['cost1'].'";';
echo 'textbox2.value = "'.$row['cost2'].'";';
echo 'textbox3.value = "'.$row['cost3'].'";';
echo 'textbox4.value = "'.$row['cost4'].'";';
echo '}, 3000);';
echo '</script>';
}
else
{
    echo '<script>let i=0;
let placeholder="";
let placeholder2="";
let placeholder3="";
let placeholder4="";
let placeholder5="";
const txt1="1 bhk cost";
const txt2="2 bhk cost";
const txt3="3 bhk cost";
const txt4="4 bhk cost";
const txt5="5 bhk cost";
const speed=200;

function type(){
    placeholder+=txt1.charAt(i);
    placeholder2+=txt2.charAt(i);
    placeholder3+=txt3.charAt(i);
    placeholder4+=txt4.charAt(i);
    placeholder5+=txt5.charAt(i);
    document.getElementById("textbox1").setAttribute("placeholder",placeholder);
    document.getElementById("textbox2").setAttribute("placeholder",placeholder2);
    document.getElementById("textbox3").setAttribute("placeholder",placeholder3);
    document.getElementById("textbox4").setAttribute("placeholder",placeholder4);
    document.getElementById("textbox5").setAttribute("placeholder",placeholder5);

    i++;
    setTimeout(type,speed);

}
type();';
    echo 'setTimeout(function() {';
    echo 'var textbox = document.getElementById("textbox1");';
    echo 'var textbox2 = document.getElementById("textbox2");';
    echo 'var textbox3 = document.getElementById("textbox3");';
    echo 'var textbox4 = document.getElementById("textbox4");';
    echo 'var textbox5 = document.getElementById("textbox5");';
    echo 'textbox.removeAttribute("placeholder");';
    echo 'textbox.value = "'.$row['cost1'].'";';
    echo 'textbox2.value = "'.$row['cost2'].'";';
    echo 'textbox3.value = "'.$row['cost3'].'";';
    echo 'textbox4.value = "'.$row['cost4'].'";';
    echo 'textbox5.value = "'.$row['cost5'].'";';
    echo '}, 3000);';
    echo '</script>';
}

                        
                    
                    ?>