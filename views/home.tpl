<h1 style="margin-left: 20px; font-size: 2.3em;">Anime airing this season</h1>
<div id="section">
  {foreach from=$result item=oneItem}
      <div>
          <img src=images/{$oneItem.image} style="width:100px; height:100px;">
          <h1>{$oneItem.anime}</h1>
          <content>{$oneItem.summary|truncate:40}</content>
          <p>{$oneItem.date}</p>
      </div>
  {/foreach}
</div>
