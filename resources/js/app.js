import './bootstrap';

console.log('[app] initialized.')

Echo.channel('social-mood').subscribed(()=>{
    console.log('awdawd')
}).listen('EmojiClicked',handleEmojiClicked)

function handleEmojiClicked(event){
    console.log('event',event)
}
