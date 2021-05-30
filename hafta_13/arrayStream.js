
const {Readable} = require('stream');

const arabalar = ['Tesla', 'TOGG', 'Fiat', 'Mercedes', 'BMW', 'Audi', 'Renault'];

class StreamFromArray extends Readable {
    constructor(array) {
        super({objectMode: true});
        this.array = array;
        this.index = 0;
    }

    _read() {
        if(this.index <= this.array.length){
            const parca = {
                data: this.array[this.index],
                index: this.index
            };
            this.push(parca);
            this.index += 1;
            console.log("okundu:");
        }else{
            this.push(null);
        }
    }
}

const arabalarStream = new StreamFromArray(arabalar);

arabalarStream.on('data', (parca) => console.log(parca));
arabalarStream.on('end', () => console.log('Array tamamen okundu'));

