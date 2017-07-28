turnObjectIntoJsonString(['name -> Angel', 'surname -> Georgiev', 'age -> 20', 'grade -> 6.00', 'date -> 23/05/1995', 'town -> Sofia']);

function turnObjectIntoJsonString(arr) {
    let obj = {};
    for (let i = 0; i < arr.length; i++) {
        let value = arr[i].split(' -> ');
        if (value[0] == 'age' || value[0] == 'grade') {
            obj[value[0]] = Number(value[1]);
        }
        else {
            obj[value[0]] = value[1];
        }
    }
    console.log(JSON.stringify(obj));
}