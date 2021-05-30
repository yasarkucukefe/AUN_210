const { Transform } = require('stream');

class MetinDegistir extends Transform {
    constructor(harf){
        super();
        this.degistirHarf = harf;
    }

    _transform(parca, encoding, callback) {
        const donusturParca = parca.toString().replace(/[a-z]|[A-Z]|[0-9]/g, this.degistirHarf);
        this.push(donusturParca)
        callback();
    }

    _flush(callback) {
        this.push('callback');
        callback();
    }
}

const xStream = new MetinDegistir("*");

process.stdin.pipe(xStream).pipe(process.stdout);