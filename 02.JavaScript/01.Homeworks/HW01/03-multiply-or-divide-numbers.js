/**
 * Created by Tihomir Dimov on 26.7.2017 г..
 */
function multiplyTwoNumnbers(nums) {
    let first = Number(nums[0]);
    let second = Number(nums[1]);
    if (first <= second) {
        return first * second;
    } else {
        return first / second;
    }
}