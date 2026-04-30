const myForm = document.getElementById("myForm");
const result = 


myForm.addEventListener("submit", formSubmit);


function formSubmit(e){
    e.preventDefault();
    const formData = new FormData();
    const selectedRadio = document.querySelector('input[name="btnradio"]:checked');
    if(selectedRadio){
        console.log(selectedRadio.value);
        formData.append('name', selectedRadio.value);

        formData.append('operazione', selectedRadio.value);
        formData.append('num1',document.getElementById("num1").value);
        formData.append('num2', document.getElementById("num2").value);

        fetch("/api/v1/" + selectedRadio.value, {
            method: "post",
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
            },
            body: formData
        })
        .then(response => {
            if (!response.ok) {
                throw new Error(`HTTP error! status: ${response.status}`);
            }
            return response.json();
        })
        .then(data => console.log(data))
        .catch(error => console.error(error))
    }
    
}