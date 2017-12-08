
/*
*
* EZEK KELLENEK A HTML HEADER RESZBE
*
*<script type="text/javascript" src=".\underscore.js"></script>
* <script type="text/javascript" src=".\jquery-3.2.1.js"></script>
* pelda:   var data = [
*           {"egy":"1","ketto":"2","harom":"3","negy":"4"},
*           {"egy":"1","ketto":"2","harom":"3","negy":"4"},
*           {"egy":"1","ketto":"2","harom":"3","negy":"4"},
*           {"egy":"1","ketto":"2","harom":"3","negy":"4"},
*           {"egy":"1","ketto":"2","harom":"3","negy":"4"},
*           {"egy":"1","ketto":"2","harom":"3","negy":"4"},
*           {"egy":"1","ketto":"2","harom":"3","negy":"4"},
*           {"egy":"1","ketto":"2","harom":"3","negy":"4"},
*           {"egy":"1","ketto":"2","harom":"3","negy":"4"},
*           {"egy":"1","ketto":"2","harom":"3","negy":"4"}
*            ];
*
*/

function generate_table(data) {

    var size = _.size(data); //a tomb merete
    var keys = _.keys(data[0]); //a kulcsok amivel vegig megyek rajta
    var keylength = _.keys(data[0]).length; //hany ilyen kulcs van

    var table = $('<table></table>').addClass('foo');

    var tbh = $('<tr></tr>');

    for (var j = 0; j < keylength; j++) {
        var tbhcontent = $('<th></th>').addClass('bar').text(keys[j]);
        tbh.append(tbhcontent);
    }

    table.append(tbh);

    for (var i = 0; i < size; i++) {
        var row = $('<tr></tr>');
        for (var j = 0; j < keylength; j++) {
            var rowData = $('<td></td>').addClass('bar').text(data[i][keys[j]]);
            row.append(rowData);
        }
        table.append(row);
    }
    //kell egy div aminek az id-ja "here_table" ahove elhelyezi
    $('#here_table').append(table);
}
