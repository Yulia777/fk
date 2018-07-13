<?
if($INCLUDE_FROM_CACHE!='Y')return false;
$datecreate = '001528483791';
$dateexpire = '001532083791';
$ser_content = 'a:2:{s:7:"CONTENT";s:3953:"	<div class="iblock-vote" id="vote_151" itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">
		<meta itemprop="ratingValue" content="3" />
		<meta itemprop="reviewCount" content="1" />
		<meta itemprop="bestRating" content="5" />
		<meta itemprop="worstRating" content="0" />
<script type="text/javascript">
if(!window.voteScript) window.voteScript =
{
	trace_vote: function(div, flag)
	{
		var my_div;
		var r = div.id.match(/^vote_(\\d+)_(\\d+)$/);
		for(var i = r[2]; i >= 0; i--)
		{
			my_div = document.getElementById(\'vote_\'+r[1]+\'_\'+i);
			if(my_div)
			{
				if(flag)
				{
					if(!my_div.saved_class)
						my_div.saved_className = my_div.className;
					if(my_div.className!=\'star-active star-over\')
						my_div.className = \'star-active star-over\';
				}
				else
				{
					if(my_div.saved_className && my_div.className != my_div.saved_className)
						my_div.className = my_div.saved_className;
				}
			}
		}
		i = r[2]+1;
		while(my_div = document.getElementById(\'vote_\'+r[1]+\'_\'+i))
		{
			if(my_div.saved_className && my_div.className != my_div.saved_className)
				my_div.className = my_div.saved_className;
			i++;
		}
	},
		do_vote: function(div, parent_id, arParams)
	{
		var r = div.id.match(/^vote_(\\d+)_(\\d+)$/);

		var vote_id = r[1];
		var vote_value = r[2];

		function __handler(data)
		{
			var obContainer = document.getElementById(parent_id);
			if (obContainer)
			{
				//16a Мы предполагаем, что шаблон содержит только один элемент (например div или table)
				var obResult = document.createElement("DIV");
				obResult.innerHTML = data;
				obContainer.parentNode.replaceChild(obResult, obContainer);
			}
		}

		//BX(\'wait_\' + parent_id).innerHTML = BX.message(\'JS_CORE_LOADING\');
				arParams[\'vote\'] = \'Y\';
		arParams[\'vote_id\'] = vote_id;
		arParams[\'rating\'] = vote_value;
				BX.ajax.post(
			\'/bitrix/components/bitrix/iblock.vote/component.php\',
			arParams,
			__handler
		);
			}
}
</script>
<table>
	<tr>
															<td><div id="vote_151_0" class="star-active star-voted" title="1" onmouseover="voteScript.trace_vote(this, true);" onmouseout="voteScript.trace_vote(this, false)" onclick="voteScript.do_vote(this, \'vote_151\', {\'SESSION_PARAMS\':\'f320b15ac9d4325c94240e78d30e9ed7\',\'PAGE_PARAMS\':{\'ELEMENT_ID\':\'151\'},\'sessid\':\'0af00782649432b1ae19b569ae5f224e\',\'AJAX_CALL\':\'Y\'})"></div></td>
																<td><div id="vote_151_1" class="star-active star-voted" title="2" onmouseover="voteScript.trace_vote(this, true);" onmouseout="voteScript.trace_vote(this, false)" onclick="voteScript.do_vote(this, \'vote_151\', {\'SESSION_PARAMS\':\'f320b15ac9d4325c94240e78d30e9ed7\',\'PAGE_PARAMS\':{\'ELEMENT_ID\':\'151\'},\'sessid\':\'0af00782649432b1ae19b569ae5f224e\',\'AJAX_CALL\':\'Y\'})"></div></td>
																<td><div id="vote_151_2" class="star-active star-voted" title="3" onmouseover="voteScript.trace_vote(this, true);" onmouseout="voteScript.trace_vote(this, false)" onclick="voteScript.do_vote(this, \'vote_151\', {\'SESSION_PARAMS\':\'f320b15ac9d4325c94240e78d30e9ed7\',\'PAGE_PARAMS\':{\'ELEMENT_ID\':\'151\'},\'sessid\':\'0af00782649432b1ae19b569ae5f224e\',\'AJAX_CALL\':\'Y\'})"></div></td>
																<td><div id="vote_151_3" class="star-active star-empty" title="4" onmouseover="voteScript.trace_vote(this, true);" onmouseout="voteScript.trace_vote(this, false)" onclick="voteScript.do_vote(this, \'vote_151\', {\'SESSION_PARAMS\':\'f320b15ac9d4325c94240e78d30e9ed7\',\'PAGE_PARAMS\':{\'ELEMENT_ID\':\'151\'},\'sessid\':\'0af00782649432b1ae19b569ae5f224e\',\'AJAX_CALL\':\'Y\'})"></div></td>
																<td><div id="vote_151_4" class="star-active star-empty" title="5" onmouseover="voteScript.trace_vote(this, true);" onmouseout="voteScript.trace_vote(this, false)" onclick="voteScript.do_vote(this, \'vote_151\', {\'SESSION_PARAMS\':\'f320b15ac9d4325c94240e78d30e9ed7\',\'PAGE_PARAMS\':{\'ELEMENT_ID\':\'151\'},\'sessid\':\'0af00782649432b1ae19b569ae5f224e\',\'AJAX_CALL\':\'Y\'})"></div></td>
												</tr>
</table>
</div>";s:4:"VARS";a:2:{s:8:"arResult";a:1:{s:4:"AJAX";a:2:{s:11:"SESSION_KEY";s:32:"f320b15ac9d4325c94240e78d30e9ed7";s:14:"SESSION_PARAMS";a:17:{s:11:"PAGE_PARAMS";a:1:{i:0;s:10:"ELEMENT_ID";}s:9:"IBLOCK_ID";i:17;s:8:"MAX_VOTE";i:5;s:10:"VOTE_NAMES";a:0:{}s:10:"CACHE_TYPE";s:1:"A";s:10:"CACHE_TIME";s:7:"3600000";s:17:"DISPLAY_AS_RATING";s:8:"vote_avg";s:9:"READ_ONLY";N;s:12:"ELEMENT_CODE";N;s:11:"SHOW_RATING";s:1:"N";s:14:"SET_STATUS_404";s:1:"N";s:11:"MESSAGE_404";N;s:14:"COMPONENT_NAME";s:18:"bitrix:iblock.vote";s:13:"TEMPLATE_NAME";s:14:"element_rating";s:11:"PARENT_NAME";s:22:"bitrix:catalog.element";s:20:"PARENT_TEMPLATE_NAME";s:4:"main";s:20:"PARENT_TEMPLATE_PAGE";s:0:"";}}}s:18:"templateCachedData";a:3:{s:13:"additionalCSS";s:83:"/bitrix/templates/aspro_next/components/bitrix/iblock.vote/element_rating/style.css";s:9:"frameMode";N;s:12:"frameModeCtx";s:86:"/bitrix/templates/aspro_next/components/bitrix/iblock.vote/element_rating/template.php";}}}';
return true;
?>