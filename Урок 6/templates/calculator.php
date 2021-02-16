<h2>Калькулятор цены</h2>
<form action="" method="POST" id="calc">
    <input type="number" name="num1" value="<?=$values['num1']?>">
    <select name="operation">
        <option value="addition" <?php if ($operation == 'addition') echo 'selected';?>>+</option>
        <option value="subtraction" <?php if ($operation == 'subtraction') echo 'selected';?>>-</option>
        <option value="multiplication" <?php if ($operation == 'multiplication') echo 'selected';?>>*</option>
        <option value="division" <?php if ($operation == 'division') echo 'selected';?>>/</option>
    </select>
    <input type="number" name="num2" value="<?=$values['num2']?>">
    <input type="submit" value="=">
    <input type="text" value="<?=$values['result']?>" readonly>
</form>