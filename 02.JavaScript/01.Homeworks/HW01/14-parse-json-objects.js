function parseJsonObjects(arr) {
    for (let i = 0; i < arr.length; i++) {
        let result = JSON.parse(arr[i]);
        console.log(`Name: ${result.name}`);
        console.log(`Age: ${result.age}`);
        console.log(`Date: ${result.date}`);
    }
}