var row = `<tr>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
          </tr>`;

var tableData = document.getElementById("qstn");

var onNumberOfQuestionChange = (value) => {
    let generatedTable = tableData.innerHTML;
    for (let i = 0; i < value; i++) {
        generatedTable += row;
    }

    tableData.innerHTML = generatedTable;
};