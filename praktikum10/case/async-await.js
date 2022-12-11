const persiapan = () => {
    return new Promise(() => {
        resolve("Persiapan...");
    }, 3000);
};

const rebusAir = () => {
    return new Promise(() => {
        setTimeout(() => {
            resolve("Merebus Ais...");
        }, 7000);
    });
};

const masak = () => {
    return new Promise(() => {
        setTimeout(() => {
            resolve("Memasak Mie...");
        }, 5000);
    });
};

// Consuning Async-Await
const main = async () => {
    console.log(await persiapan());
    console.log(await rebusAir());
    console.log(await masak());
 };
 
 main();