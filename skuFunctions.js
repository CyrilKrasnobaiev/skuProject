//function for opening id=function_sku(rewiev, creating, editing)
$(document).ready(function(){
    $('.sku_create').click(function(){
        $('#sku_function').toggle('fast');
    });
});

//function for opening id=sku_createTable(table, create table)
$(document).ready(function(){
    $('#sku_building').click(function(){
        $('#sku_createTable').toggle('fast');
    });
});

//function for opening id=sku_add(div for calling form)
$(document).ready(function(){
    $('#sku_card').click(function(){
        $('#sku_add').toggle('fast');
        $('#sku_save').toggle('fast');
        $('#sku_alterTable').toggle('fast');
        $('#sku_deleteTable').toggle('fast');
    });
});

//function for opening id=sku_card_form(open the form)
$(document).ready(function(){
    $('#sku_add').click(function(){
        $('#scu_card_form').show('fast');
    });
});

//function for opening id=sku_card_form2(open the form)
$(document).ready(function(){
    $('#sku_alterTable').click(function(){
        $('#scu_card_form2').show('fast');
    });
});

$(document).ready(function(){
    $('#sku_alterTable').click(function(){
        $( "#scu_card_form" ).append('<div id="scu_card_form2"><form method="post" id="scu_card_form3" action="alterDataToTable.php"><div><div>��������<br><input checked="" type="text" name="name_text" class="name_text"><br><br></div><div>��� ������<br><select name="select_variant"><option value="number" name="number">�����</option><option value="digit" name="digit">�����</option><option value="int_digit" name="int_digit">����� �����</option><option value="text" name="text">�����</option><option value="date" name="date">����</option><option value="time" name="time">�����</option><option value="checkbox1" name="checkbox1">�������</option><option value="status" name="status">������</option><option value="list" name="list">������</option><option value="photo" name="photo">����</option><option value="user" name="user">������������</option></select></div><div>�����������<br><input type="checkbox" class="mandatory" name="checkbox_name"></div></div><input type="submit" value="��������"><input type="submit" value="�������"></form></div>');
    });
});



/*function for clone form on the page
function makeCopy() {
    var original = document.getElementById("scu_card_form");
    var clone = TToriginal.cloneNode(true);
    original.parentNode.appendChild(clone);
}
*/



