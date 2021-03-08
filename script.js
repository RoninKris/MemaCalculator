function ValidateInput1(){
    let getN1 = document.forms['myForm'].n1;
    if(isNaN(getN1.value)){
        getN1.style = "border: 2px solid red; color: red";
    }
    else{
        getN1.style = "border: none; color: #5c728a";
    }
}
function ValidateInput2(){
    let getN2 = document.forms['myForm'].n2.value;
    if(isNaN(getN2.value)){
        getN2.style = "border: 2px solid red; color: red";
    }
    else{
        getN2.style = "border: none; color: #5c728a";
    }
}