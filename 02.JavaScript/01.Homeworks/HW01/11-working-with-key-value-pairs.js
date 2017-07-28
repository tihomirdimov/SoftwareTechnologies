/**
 * Created by Tihomir Dimov on 27.7.2017 г..
 */

keyValuePairs(['3 test', '3 test1', '4 test2', '4 test3', '4 test5', '4']);

function keyValuePairs(arr) {
    let dictionary = {};
    for (let i = 0; i < arr.length - 1; i++) {
        let input = arr[i].split(' ');
        let key = input[0];
        let value = input[1];
        dictionary[key] = value;
    }
    if (dictionary.hasOwnProperty(arr[arr.length - 1])) {
        console.log(dictionary[arr[arr.length - 1]]);
    }
    else {
        console.log('None')
    }
}