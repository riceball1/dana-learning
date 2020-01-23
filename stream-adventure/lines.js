var split2 = require('split2');
var through2 = require('through2');

var lineValue = 1;

function write (line, _, next) {
    if(lineValue % 2 == 0) {
        this.push(line.toString().toUpperCase());
    }
    this.push(line.toString());
    lineValue += 1;
    next();
}

function end(done) {
    done();
}

var stream = through2(write, end);

var input = process.stdin.pipe(split2());


input.pipe(stream).pipe(process.stdout)