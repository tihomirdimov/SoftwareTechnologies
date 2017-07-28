multipleValuesForAKey(['3 test', '3 test1', '4 test2', '4 test3', '4 test5', '4']);

function multipleValuesForAKey(arr) {
    let dictionary = {};
    for (let i = 0; i < arr.length - 1; i++) {
        let command = arr[i].split(' ');
        let key = command[0];
        let value = command[1];
        if (dictionary.hasOwnProperty(key)) {
            dictionary[key].push(value);
        }
        else {
            let valueArray = [];
            dictionary[key] = valueArray;
            dictionary[key].push(value);
        }
    }
    if (dictionary.hasOwnProperty(arr[arr.length - 1])) {
        for (let value of dictionary[arr[arr.length - 1]]) {
            console.log(value);
        }
    }
    else {
        console.log('None')
    }
}