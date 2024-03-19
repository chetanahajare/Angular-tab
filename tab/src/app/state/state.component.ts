import { Component } from '@angular/core';
import {MatTableDataSource, MatTableModule} from '@angular/material/table';
import {MatButtonModule} from '@angular/material/button';

@Component({
  selector: 'app-state',
  standalone: true,
  imports: [MatTableModule,MatButtonModule],
  templateUrl: './state.component.html',
  styleUrl: './state.component.scss'
})
export class StateComponent {
  displayedColumns: string[] = ['statename', 'countryname', 'imgurl','actions'];
  dataSource = new MatTableDataSource<any>([
    {statename: 'Karnataka', countryname: 'India', imgurl: 'sdj.jpeg'},
    {statename: 'Karnataka', countryname: 'India', imgurl: 'sdj.jpeg'},
    {statename: 'Karnataka', countryname: 'India', imgurl: 'sdj.jpeg'},
    {statename: 'Karnataka', countryname: 'India', imgurl: 'sdj.jpeg'},
    {statename: 'Karnataka', countryname: 'India', imgurl: 'sdj.jpeg'},
    {statename: 'Karnataka', countryname: 'India', imgurl: 'sdj.jpeg'},
    {statename: 'Karnataka', countryname: 'India', imgurl: 'sdj.jpeg'},
    {statename: 'Karnataka', countryname: 'India', imgurl: 'sdj.jpeg'},
  ]);
}
