function drawLine(arg){
    for(let x = 0; x < arg.length; x++){
        let textInline = '';
        for(let y = 0; y < arg.length; y++){
            if(y == x){
                textInline += arg[x];
            }else{
                textInline += '-';
            }
        }
        console.log(textInline);
    }
}