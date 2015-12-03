
Vue.component 'chatbox', {
  template: "#template-chatbox"
  props: ['list']
  computed:
    hasMessage: ->
      this.list.length > 0
  methods:
    isOdd: (number)->
      if parseInt(number) % 2 == 0 then 'left' else "right"
}

new Vue(
  el: "#app"
  data:
    message:
      name:""
      message:""
    myDataRef: new Firebase 'https://boiling-heat-3376.firebaseio.com'
    list: []

  methods:
    resetInputs: ->
      this.message.name = this.message.message = ""
    sendMessage: ->
      ref = this.myDataRef.push(this.message)
      console.log ref
      this.resetInputs()
    keyPress: (e)->
      if e.keyCode == 13
        this.sendMessage()
  ready: ->
    self = this
    this.myDataRef.on 'child_added', (snapshot)->
      data = snapshot.val()
      self.list.push {name: data.name, message:data.message, key:snapshot.key()}
)
