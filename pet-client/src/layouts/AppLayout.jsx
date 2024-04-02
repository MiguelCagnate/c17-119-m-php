import { Outlet } from "react-router-dom"

export default function AppLayout() {
  return (
    <>
        <header className="App-header">
            <h1>React Redux Firebase Starter</h1>
        </header>
        <Outlet/>
    </>
  )
}
