/**
 * Created by Tihomir Dimov on 27.7.2017 г..
 */
function printNumbersInReversedOrder(arr) {
    let count = Number(arr[0]);
    let newArray = [];
    for (let i = 1; i < arr.length; i++) {
        let temp = arr[i].split(' - ');
        let index = temp[0];
        let value = temp[1];
        newArray[index] = value;
    }
    for (let j = 0; j < count; j++) {
        if (newArray[j] == undefined) {
            console.log(0);
        }
        else {
            console.log(newArray[j]);
        }
    }
}