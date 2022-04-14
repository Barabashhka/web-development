function isPrimeNumber(i) {
  if (typeof i === 'number') {
    let multiple = 1;
    if (i == 1) {
      multiple = 0;  
    } else {
      for (n = 2; n < i; n++) {
      if (i % n == 0) {
        multiple++;
      }
    }
    }
    if (multiple == 1) {
      console.log(`${i} is prime number`);
    } else {
      console.log(`${i} is not prime number`);
    }
  } else {
    if (typeof i === 'object') {
      for (let j in i) {
        isPrimeNumber(i[j])
      }
    } else {
      console.log('incorrect data entered');
    }
  }
}