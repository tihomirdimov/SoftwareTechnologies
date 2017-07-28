/**
 * Created by Tihomir Dimov on 27.7.2017 г..
 */
function addRemoveElements(arr) {
    let numbers = [];
    for (let i = 0; i < arr.length; i++) {
        let input = arr[i].split(' ');
        let command = input[0];
        let argument = input[1];
        switch (command) {
            case ('add'):
                numbers.push(argument);
                break;
            case ('remove'):
                if (argument > -1 && argument < numbers.length) {
                    numbers.splice(argument, 1);
                }
                break;
        }
    }
    for (let i = 0; i < numbers.length; i++) {
        console.log(numbers[i]);
    }
}