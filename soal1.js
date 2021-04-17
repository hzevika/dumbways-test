function cetak(length) {
    while(length > 0){
        let result = '';
        let characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
        for ( let i = 0; i < 28; i++ ) {
            result += characters.charAt(Math.floor(Math.random() * characters.length));
        }
        console.log(result);
        length--;
    }
 }