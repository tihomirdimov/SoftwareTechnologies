/**
 * Created by Tihomir Dimov on 27.7.2017 г..
 */
function printLines(arr) {
    for (i = 0; i < arr.length; i++) {
        if (arr[i] == 'Stop') {
            break;
        }
        console.log(arr[i])
    }
}
