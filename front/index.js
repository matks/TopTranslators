import path from 'path'
import React from 'react'
import { render } from 'react-dom'
import { Provider } from 'react-redux'
import { createStore, applyMiddleware } from 'redux'
import thunkMiddleware from 'redux-thunk'
import reducers from './reducers'
import Root from './components/Root'

let store = createStore(
  reducers,
  window.devToolsExtension ? window.devToolsExtension() : undefined,
  applyMiddleware(
    thunkMiddleware
  )
)

render(
  <Provider store={store}>
    <Root />
  </Provider>,
  document.getElementById('root')
)
