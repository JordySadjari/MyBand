
<section>
  {foreach from=$result item=oneItem}
      <articles>
          <img src=images/{$oneItem.image} style="width:100px; height:100px;">
          <h1>{$oneItem.title}</h1>
          <content>{$oneItem.content|truncate:40}</content>
          <p>{$oneItem.date_created|date_format:"%e %B %Y"}</p>
      </articles>
  {/foreach}
</section>
