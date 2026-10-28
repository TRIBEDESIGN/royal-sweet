// ユーザー一覧をドラッグで並べ替えて表示順を保存する（保存処理は functions.php の tribe_save_user_priority）
jQuery(function ($) {
  var i = 1;
  var cfg = window.tribeSortUser || {};

  $('#the-list').html(
    $('#the-list tr').sort(function (a, b) {
      var numa = Number($(a).find('.priority').text()) || 9999;
      var numb = Number($(b).find('.priority').text()) || 9999;
      return numa > numb ? 1 : -1;
    })
  );

  $('#the-list').sortable({ items: 'tr' });

  var formHtml =
    '<form action="' +
    cfg.postUrl +
    '" method="post" id="sort-list" class="alignleft actions">' +
    '<input type="hidden" name="action" value="' +
    cfg.action +
    '">' +
    '<input type="hidden" name="_wpnonce" value="' +
    cfg.nonce +
    '">' +
    '<input type="hidden" id="result" name="result" value="">' +
    '<button type="button" id="sort" class="button">並び替えを保存</button>' +
    '</form>';

  $('.tablenav.bottom .alignleft:nth-of-type(2)').after(formHtml);

  $('#the-list tr').each(function () {
    $(this).attr('data-num', i);
    i++;
  });

  $('#sort').on('click', function () {
    var result = $('#the-list').sortable('toArray');
    for (var j = 0; j < result.length; j++) {
      result[j] = result[j].replace('user-', '');
    }
    $('#result').val(result.join(','));
    $('#sort-list').trigger('submit');
  });
});
