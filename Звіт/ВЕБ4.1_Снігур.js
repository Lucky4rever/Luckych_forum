var A = new Array(1, 4, 7, 3, 4, 2, 9, 0, 5, 3);
var B = new Array(6, 0, 7, 2, 9, 1, 9, 8, 5, 4);
var C = new Array();

console.log("До зміни:");

for(var i=0; i<10; i++) {
    if (A[i]==B[i])
        C[i]=1;
    else
        C[i]=1/(A[i]-B[i]);
    console.log(C[i]);
}

console.log("Після зміни:");

var n = C.length - 1, x = C[n];
C[n] = C[0];
C[0] = x;
for(var i=0; i<10; i++)
    console.log(C[i]);

console.log("Після бульбашки:");

bubbleSort(C);
for(var i=0; i<10; i++)
    console.log(C[i]);

function bubbleSort(arr) {
    for (var i = 0, endI = arr.length - 1; i < endI; i++)
        for (var j = 0, endJ = endI - i; j < endJ; j++)
            if (arr[j] > arr[j + 1]) {
                var swap = arr[j];
                arr[j] = arr[j + 1];
                arr[j + 1] = swap;
            }
    return arr;
}