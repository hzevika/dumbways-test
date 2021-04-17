function urutKata(kalimat){
    let arrKata = kalimat.split(' ');
    let result = '';

    for(let i = 1; i <= 9; i++){
        for(let x of arrKata){
            for(let y = 0; y < x.length; y++){
                if(x[y] == i){
                    result += x+' ';
                    break;
                }
            }
        }
    }
    console.log(result);
}