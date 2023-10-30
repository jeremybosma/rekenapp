function berekenPlus() {
  let eersteInput = parseFloat(document.getElementById("plus1").value);
  let TweedeInput = parseFloat(document.getElementById("plus2").value);

  if (isNaN(eersteInput + TweedeInput)) {
    document.getElementById("antwoord").innerHTML = errorTekst;
  } else {
    document.getElementById("antwoord").innerHTML =
      eersteInput + "+" + TweedeInput + "=" + (eersteInput + TweedeInput);
  }
}

function berekenMin() {
  let eersteInput = parseFloat(document.getElementById("-1").value);
  let TweedeInput = parseFloat(document.getElementById("-2").value);

  if (isNaN(eersteInput - TweedeInput)) {
    document.getElementById("antwoord").innerHTML = errorTekst;
  } else {
    document.getElementById("antwoord").innerHTML =
      eersteInput + "-" + TweedeInput + "=" + (eersteInput - TweedeInput);
  }
}

function berekenX() {
  let eersteInput = parseFloat(document.getElementById("x1").value);
  let TweedeInput = parseFloat(document.getElementById("x2").value);

  if (isNaN(eersteInput * TweedeInput)) {
    document.getElementById("antwoord").innerHTML = errorTekst;
  } else {
    document.getElementById("antwoord").innerHTML =
      eersteInput + "x" + TweedeInput + "=" + eersteInput * TweedeInput;
  }
}

function berekenDelen() {
  let eersteInput = parseFloat(document.getElementById("deel1").value);
  let TweedeInput = parseFloat(document.getElementById("deel2").value);

  if (isNaN(eersteInput / TweedeInput)) {
    document.getElementById("antwoord").innerHTML = errorTekst;
  } else {
    document.getElementById("antwoord").innerHTML =
      eersteInput + "÷" + TweedeInput + "=" + eersteInput / TweedeInput;
  }
}
