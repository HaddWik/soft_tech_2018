function multipleValuesForKey(input) {
    let object = {};
    for(let i = 0; i < input.length-1; i++) {
        let tokens = input[i].split(' ');
        let key = tokens[0];
        let value = tokens[1];
        if(!object.hasOwnProperty(key)) {
            object[key] = new Array();
        }
        object[key].push(value);
    }

    let key = input[input.length - 1];
    if(object.hasOwnProperty(key)) {
        for(let value of object[key]) {
            console.log(value);
        }
    } else {
        console.log("None");
    }
}