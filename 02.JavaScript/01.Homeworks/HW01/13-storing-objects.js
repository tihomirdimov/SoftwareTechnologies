storingObjects(['Pesho -> 13 -> 6.00', 'Ivan -> 12 -> 5.57', 'Toni -> 13 -> 4.90']);

function storingObjects(arr) {
    for (let line of arr) {
        let input = line.split('->');
        let name = input[0].trim();
        let age = input[1].trim();
        let grade = input[2].trim()
        let person = {
            Name: name,
            Age: age,
            Grade: grade
        };
        for (let key in person) {
            console.log(key + ': ' + person[key]);
        }
    }
}