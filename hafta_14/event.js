const EventEmitter = require("events");

const myEmitter = new EventEmitter();

const c1 = () => {console.log("An event occured");}

const c2 = () => {console.log("Another event occured");}

myEmitter.on("eventOne", c1);
myEmitter.on("eventOne", c2);

myEmitter.emit('eventOne');