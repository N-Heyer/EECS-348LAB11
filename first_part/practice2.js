function paragraph_color() {
    const b_R = document.getElementById("b_R").value;
    const b_G = document.getElementById("b_G").value;
    const b_B = document.getElementById("b_B").value;
    const b_width = document.getElementById("b_width").value;
    const bg_R = document.getElementById("bg_R").value;
    const bg_G = document.getElementById("bg_G").value;
    const bg_B = document.getElementById("bg_B").value;

    const tag = document.getElementById("paragraph");
    tag.style.borderColor = `rgb(${b_R}, ${b_G}, ${b_B})`;
    tag.style.borderWidth = `${b_width}px`;
    tag.style.backgroundColor = `rgb(${bg_R}, ${bg_G}, ${bg_B})`;
}