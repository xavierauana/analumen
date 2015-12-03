module.exports =
  template: require('./template.html')
  props:[
    'list'
  ]
  computed:
    hasMessage: ->
      this.list.length > 0
