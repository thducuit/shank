function addField(lang) {
  var html = '<li>' + '<textarea name=\'features[' + lang  + '][]\' class=\'textarea small full\'></textarea>' + '</li>';
  $('#feature-list-'+ lang).append(html);
}
$(document).ready(function() {
  $('.feature-list').sortable();
  
});