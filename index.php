<link href="calc.css" rel="stylesheet" type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="calc.js"></script>

<div class="calc_body">
    <span>Калькулятор стоимости</span>
    <form name="calc_form" action="" id="calc_formid">
        <label for="calc_amount">Cумма в гривнах:</label>
        <input name="calc_amount" value="1" size="4" />
        <div class="calc_clear"></div>
        <label for="calc_rates">Валюта:</label>
        <select name="calc_rates" id="ratesoption">
            <option value="RUB">RUB</option>
            <option value="EUR">EUR</option>
            <option value="USD">USD</option>
            <option value="BYN">BYN</option>
        </select>
        <div class="calc_clear"></div>
        <input type="submit" value="Расчет" name="calc_do" class="calc_button" />
    </form>
    <label>Результат: </label><input name="result" id="calc_result" value="" disabled="disabled" size="4" />
    <div class="calc_clear"></div>
    <div id="calc_error"></div>
</div>