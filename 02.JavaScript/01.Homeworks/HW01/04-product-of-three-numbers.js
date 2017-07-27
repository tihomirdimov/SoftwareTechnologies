/**
 * Created by Tihomir Dimov on 27.7.2017 г..
 */
function productOfThreeNumbers(nums) {
    let counter = 0;
    for (let i = 0; i < nums.length; i++) {
        if (nums[i] == 0) {
            return 'Positive';
        }
        else if (nums[i] < 0) {
            counter++;
        }
    }
    if (counter % 2 != 0) {
        return 'Negative';
    }
    else{
        return 'Positive';
    }
}