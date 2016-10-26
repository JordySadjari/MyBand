<h1 style="margin-left: 20px; font-size: 2.3em;">News articles</h1>
<div id="section">
  {foreach from=$result item=oneItem}
      <div class="article">
          <img src=images/{$oneItem.image} style="width:100px; height:100px;">
          <h1>{$oneItem.title}</h1>
          <content>{$oneItem.content|truncate:40}</content>
          <p>{$oneItem.date_created|date_format:"%e %B %Y"}</p>
      </div>
  {/foreach}
</div>
